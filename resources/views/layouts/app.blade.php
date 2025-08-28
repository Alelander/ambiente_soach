<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SOACH</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label { display: inline-block; width: 150px; margin-top: 10px; }
        input, select { margin-top: 10px; }
        form { margin-bottom: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</head>
<body>
    @yield('content')

    <script>
        (function () {
        // --- util: cerrar y limpiar cualquier rastro de SweetAlert ---
        function removeSwal() {
            try { Swal.close(); } catch(_) {}
            document.querySelectorAll('.swal2-container').forEach(el => el.remove());
        }

        // Detectar back/forward (incluye bfcache) de forma robusta
        const nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
        const cameFromBFCache = !!(nav && nav.type === 'back_forward');

        // Antes de que la página se congele en bfcache, cerramos el modal
        window.addEventListener('pagehide', removeSwal, {capture:true});
        // Al restaurar desde bfcache, nos aseguramos de que no quede ningún modal visible
        window.addEventListener('pageshow', function (e) {
            if (e.persisted || cameFromBFCache) removeSwal();
        });

        // Flashes de Laravel (escapados correctamente)
        const success = @json(session('success'));
        const error   = @json(session('error'));
        const errs    = @json($errors->any() ? $errors->all() : []);

        // No mostrar el modal en una restauración desde el historial (back/forward)
        const isBackForward = cameFromBFCache || (performance && performance.navigation && performance.navigation.type === 2);
        const state = history.state || {};

        function markConsumed() {
            try {
            const next = Object.assign({}, history.state, { swalDismissed: true });
            history.replaceState(next, '', location.href);
            } catch (_) {}
        }

        if (!isBackForward && !state.swalDismissed) {
            if (success) {
            Swal.fire({ icon:'success', title:'Éxito', text: success }).then(markConsumed);
            } else if (error) {
            Swal.fire({ icon:'error', title:'Error', text: error }).then(markConsumed);
            } else if (errs && errs.length) {
            Swal.fire({
                icon:'error',
                title:'Error',
                html: errs.map(e => `<div>${e}</div>`).join('')
            }).then(markConsumed);
            }
        } else {
            // Si venimos de back/forward, asegúrate de que no quede nada abierto
            removeSwal();
        }
        })();
    </script>

</body>
</html>
