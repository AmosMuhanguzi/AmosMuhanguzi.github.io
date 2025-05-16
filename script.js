// Theme Toggle
const toggle = document.getElementById('toggle-theme');
toggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');
});

// Filter Projects
const filterButtons = document.querySelectorAll('.filter-btn');
const projects = document.querySelectorAll('.project-card');

filterButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    const category = btn.dataset.filter;
    projects.forEach(card => {
      card.style.display = (category === 'all' || card.dataset.category === category) ? 'block' : 'none';
    });
  });
});