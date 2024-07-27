document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
  });
  
  document.addEventListener("DOMContentLoaded", function() {
    const gridBtn = document.getElementById("gridbtn");
    const listBtn = document.getElementById("listbtn");
    const gridView = document.querySelector(".gridView");
    const tableView = document.querySelector(".tableView");
    const filtermenu = document.querySelector(".filter-button-wrapper");

    gridBtn.addEventListener("click", function() {
        gridView.style.display = "flex";
        tableView.style.display = "none";
        filtermenu.style.display = "block";
    });

    listBtn.addEventListener("click", function() {
        gridView.style.display = "none";
        tableView.style.display = "block";
        filtermenu.style.display = "none";
    });
});

  
  var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                      
    document.documentElement.classList.toggle('light');
   modeSwitch.classList.toggle('active');
  });