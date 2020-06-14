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

const deleteDefinitionEl = document.querySelector("#deleteDefinition");
const crossDeleteDefinition = document.querySelectorAll(
  "#crossDeleteDefinition"
);

for (let index = 0; index < crossDeleteDefinition.length; index++) {
  const element = crossDeleteDefinition[index];

  element.addEventListener("click", () => {
    const definitionId = element.getAttribute("data-definitionId");
    deleteDefinition(definitionId);
  });
}

const deleteDefinition = (definitionId) => {
  deleteDefinitionEl.addEventListener("click", () => {
    deleteForm.setAttribute(
      "action",
      `index.php?url=definition&id=${definitionId}`
    );
  });
};
