// Map page IDs to their corresponding content
const pageMap = {
    home: {
      heading: 'Welcome to the Home Page',
      content: 'This is the home page content. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    },
    page1: {
      heading: 'Page 1',
      content: 'This is the content of Page 1. Morbi elementum sem eu aliquet porttitor.'
    },
    page2: {
      heading: 'Page 2',
      content: 'This is the content of Page 2. Sed eu nisi elementum, aliquet sapien ut, facilisis risus.'
    }
  };

  // Function to navigate to a specific page
  function navigateTo(pageId) {
    const contentElement = document.getElementById('content');
    const pageContent = pageMap[pageId];

    // Update the content with the specified page
    contentElement.innerHTML = `
      <h1>${pageContent.heading}</h1>
      <p>${pageContent.content}</p>
    `;

    // Add the 'active' class to the page content to show it
    contentElement.classList.add('active');
  }

  // Function to handle page link clicks
  function handlePageLinkClick(event) {
    event.preventDefault();
    const pageId = event.target.getAttribute('data-page');
    navigateTo(pageId);
  }

  // Add event listeners to page links
  const pageLinks = document.getElementsByClassName('page-link');
  Array.from(pageLinks).forEach(link => {
    link.addEventListener('click', handlePageLinkClick);
  });

  // Initial page load - navigate to the home page
  navigateTo('home');
