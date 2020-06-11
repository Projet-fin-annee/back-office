const countryCross = document.querySelectorAll(".card-head");
for (let index = 0; index < countryCross.length; index++) {
  const element = countryCross[index];
  element.addEventListener("click", () => {
    const body = document.querySelector("body");
    body.innerText = "test";
  });
}
