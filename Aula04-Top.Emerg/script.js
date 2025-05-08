document.addEventListener("DOMContentLoaded", function() {
    const cpfInput = document.getElementById("cpf");
    const telefoneInput = document.getElementById("telefone");
    const dataInput = document.getElementById("data");

    cpfInput.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, "")
            .replace(/^(\d{3})(\d)/, "$1.$2")
            .replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3")
            .replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, "$1.$2.$3-$4");
    });

    telefoneInput.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, "")
            .replace(/^(\d{2})(\d)/, "($1) $2")
            .replace(/(\d{5})(\d)/, "$1-$2");
    });

    dataInput.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, "")
            .replace(/^(\d{2})(\d)/, "$1/$2")
            .replace(/(\d{2})\/(\d{2})(\d)/, "$1/$2/$3");
    });

    document.getElementById("formulario").addEventListener("submit", function(event) {
        let erro = false;

        if (cpfInput.value.length < 14) {
            document.getElementById("erro-cpf").textContent = "⚠️ CPF incompleto!";
            erro = true;
        } else {
            document.getElementById("erro-cpf").textContent = "";
        }

        if (telefoneInput.value.length < 15) {
            document.getElementById("erro-telefone").textContent = "⚠️ Telefone incompleto!";
            erro = true;
        } else {
            document.getElementById("erro-telefone").textContent = "";
        }

        if (dataInput.value.length < 10) {
            document.getElementById("erro-data").textContent = "⚠️ Data de nascimento incompleta!";
            erro = true;
        } else {
            document.getElementById("erro-data").textContent = "";
        }

        if (erro) {
            event.preventDefault();
        }
    });
});
