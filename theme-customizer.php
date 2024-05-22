<div x-data="customizer">

</div>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("customizer", () => ({
            showCustomizer: false,
        }));
    });
</script>
