
let items = document.querySelectorAll(".item");
for (let i = 0; i < items.length; i++) {
    items[i].addEventListener("click", (e) => {
        let itemParent = e.currentTarget;
        console.log(itemParent);
        itemParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".icon-bar");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
})


