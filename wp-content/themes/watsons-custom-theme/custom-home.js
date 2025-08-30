
document.addEventListener('DOMContentLoaded', function() {
    const mainView = document.getElementById('main-view');
    const subView = document.getElementById('sub-view');
    const pageLinks = document.querySelectorAll('.page-link');

    if (mainView && subView && pageLinks) {
        pageLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const pageId = this.dataset.pageId;
                const page = pageData.find(p => p.id == pageId);

                if (page) {
                    subView.innerHTML = page.content;
                    mainView.style.display = 'none';
                    subView.style.display = 'block';

                    const backButton = document.createElement('button');
                    backButton.textContent = 'Back';
                    backButton.addEventListener('click', function() {
                        mainView.style.display = 'block';
                        subView.style.display = 'none';
                    });
                    subView.prepend(backButton);
                }
            });
        });
    }
});
