// THIS JAVASCRIPT FILE IS FOR ABOUT US PAGE TAB CHANGER SECTION

function showContent(tabName, clickedTab) {

const tabContents = document.querySelectorAll('.tab-content-container');
for (let i = 0; i < tabContents.length; i++) {
    tabContents[i].classList.remove('active');
}

const tabs = document.querySelectorAll('.tab');
for (let i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove('active');
}

const selectedContent = document.getElementById(tabName + '-content');
selectedContent.classList.add('active');
clickedTab.classList.add('active');
}