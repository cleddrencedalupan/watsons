
document.addEventListener('DOMContentLoaded', function() {
    const mainView = document.getElementById('main-view');
    const subView = document.getElementById('sub-view');
    const pageLinks = document.querySelectorAll('.page-link');

    if (mainView && subView && pageLinks) {
        pageLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const pageId = this.dataset.pageId;
                const pageContent = document.getElementById('page-content-' + pageId);

                if (pageContent) {
                    subView.innerHTML = pageContent.innerHTML;
                    mainView.style.display = 'none';
                    subView.style.display = 'block';

                    const backButton = document.createElement('button');
                    backButton.innerHTML = '&times;'; // Use the multiplication sign as a close icon
                    backButton.classList.add('back-button', 'close-button');
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
