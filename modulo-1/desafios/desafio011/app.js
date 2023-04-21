porcentagem = document.querySelector("#porcentagem");

porcentagem.addEventListener("change", () => {
  document.querySelector(
    "#display"
  ).innerText = `Percentual de aumento (${porcentagem.value}%)`;
});
