const btn = document.querySelector('#btn');
const body = document.querySelector('#body');
const a = document.querySelectorAll('a');
const nav = document.querySelector('nav');
const form = document.querySelector('.form');

// Button from the sidebar
btn.addEventListener('click', () => {
    body.classList.toggle('show');
    nav.classList.toggle('show');
});

a.forEach(active => {
    if (window.location.href === active.href) {
        active.classList.add('active');
    }
    active.addEventListener('click', (e)=> {
        a.forEach(active => {
            active.classList.remove('active');
        });
            active.classList.add('active');
    });
});

// Function to save the state of all checkboxes to localStorage
function saveCheckboxState() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  
  checkboxes.forEach((checkbox, index) => {
    // Save each checkbox's checked state using a unique key based on the checkbox's id or index
    localStorage.setItem(`checkbox-${checkbox.id || index}`, checkbox.checked);
  });
}

// Function to load the saved states from localStorage
function loadCheckboxState() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  
  checkboxes.forEach((checkbox, index) => {
    // Load the saved state for each checkbox using its unique key (either id or index)
    const checkedState = localStorage.getItem(`checkbox-${checkbox.id || index}`);
    
    // If the checkbox state is stored in localStorage, apply it
    if (checkedState === 'true') {
      checkbox.checked = true;
    } else {
      checkbox.checked = false;
    }
  });
}

// Function to add a new checkbox dynamically
function addNewCheckbox() {
  const newCheckbox = document.createElement('input');
  newCheckbox.type = 'checkbox';
  newCheckbox.id = `checkbox-${Date.now()}`;  // Unique ID for each dynamically added checkbox
  document.body.appendChild(newCheckbox);

  // Add the event listener to save the state when the checkbox changes
  newCheckbox.addEventListener('change', saveCheckboxState);

  // Load the saved state (if any) for the new checkbox
  loadCheckboxState();
}

// Function to initialize checkboxes and load saved states on page load
function initializeCheckboxes() {
  // Add event listeners to save checkbox states on change
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', saveCheckboxState);
  });

  // Load the saved states from localStorage
  loadCheckboxState();
}

// Wait for the page to be loaded and initialize the checkboxes
document.addEventListener('DOMContentLoaded', () => {
  initializeCheckboxes();

  // Add an example new checkbox dynamically (this can be triggered as needed)
  // addNewCheckbox();
});
