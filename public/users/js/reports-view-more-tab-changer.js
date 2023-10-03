const defaultContent = document.querySelector('.wrapper-main-content-left-side-box-default-content');
        const toc = document.querySelector('.wrapper-main-content-left-side-box-table-of-contents');
        const requestDesc = document.querySelector('.wrapper-main-content-left-side-box-requests-description');
        const methodology = document.querySelector('.wrapper-main-content-left-side-box-methodology');
        const rdTab = document.querySelector('#rd-tab');
        const tocTab = document.querySelector('#toc-tab');
        const methoTab = document.querySelector('#metho-tab');


        tocTab.addEventListener('click', (() => {
            defaultContent.classList.add('hidden');
            requestDesc.classList.add('hidden');
            methodology.classList.add('hidden');
            toc.classList.remove('hidden');
        }));
        rdTab.addEventListener('click', (() => {
            defaultContent.classList.add('hidden');
            requestDesc.classList.remove('hidden');
            methodology.classList.add('hidden');
            toc.classList.add('hidden');
        }));
        methoTab.addEventListener('click', (() => {
            defaultContent.classList.add('hidden');
            requestDesc.classList.add('hidden');
            methodology.classList.remove('hidden');
            toc.classList.add('hidden');
        }));