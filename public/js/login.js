document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".form-group").forEach((group) => {
        const inputComponent = group.querySelector("x-text-input");
        const label = group.querySelector(".floating-label");

        // Cek apakah <x-text-input> memiliki elemen <input> di dalamnya
        if (inputComponent && label) {
            const input = inputComponent.querySelector("input");

            if (input) {
                input.addEventListener("focus", () => {
                    label.classList.add("focused");
                });

                input.addEventListener("blur", () => {
                    if (!input.value) {
                        label.classList.remove("focused");
                    }
                });

                input.addEventListener("mouseenter", () => {
                    label.classList.add("focused");
                });

                input.addEventListener("mouseleave", () => {
                    if (!input.value) {
                        label.classList.remove("focused");
                    }
                });

                // Jika input sudah terisi, pastikan label tetap di atas
                if (input.value) {
                    label.classList.add("focused");
                }
            }
        }
    });
});