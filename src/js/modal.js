const closeModal = document.querySelector("#staticBackdrop");
const deleteCountryEl = document.querySelector("#deleteCountry");
const crossDeleteCountry = document.querySelectorAll("#crossDeleteCountry");
const deleteForm = document.querySelector("#deleteForm");

for (let index = 0; index < crossDeleteCountry.length; index++) {
  const element = crossDeleteCountry[index];

  element.addEventListener("click", () => {
    const countryId = element.getAttribute("data-countryId");
    deleteCountry(countryId);
  });
}

const deleteCountry = (countryId) => {
  deleteCountryEl.addEventListener("click", () => {
    deleteForm.setAttribute(
      "action",
      `index.php?url=countries&id=${countryId}`
    );
  });
};
