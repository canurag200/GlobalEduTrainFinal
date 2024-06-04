const table = document.getElementById("myTable");
const tableBody = table.getElementsByTagName("tbody")[0];
const paginationContainer = document.getElementById("pagination");

let rowsPerPage = 10; // Adjust the number of rows per page
let currentPage = 1;
let rows = Array.from(tableBody.getElementsByTagName("tr"));

function displayRows(page) {
  const start = (page - 1) * rowsPerPage;
  const end = start + rowsPerPage;

  rows.forEach((row, index) => {
    row.style.display = index >= start && index < end ? "table-row" : "none";
  });
}

function setupPagination() {
  const totalPages = Math.ceil(rows.length / rowsPerPage);

  for (let i = 1; i <= totalPages; i++) {
    const button = document.createElement("button");
    button.textContent = i;
    button.addEventListener("click", () => {
      currentPage = i;
      displayRows(currentPage);
      updatePaginationButtons();
    });
    paginationContainer.appendChild(button);
  }

  updatePaginationButtons();
}

function updatePaginationButtons() {
  const buttons = paginationContainer.getElementsByTagName("button");
  for (const button of buttons) {
    button.disabled = parseInt(button.textContent) === currentPage;
  }
}

// Initial setup
displayRows(currentPage);
setupPagination();