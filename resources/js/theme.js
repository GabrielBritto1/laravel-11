// Theme toggle helper
// Reads preference from localStorage or system and applies 'dark' class to <html>
function applyTheme(theme) {
   const root = document.documentElement;
   if (theme === 'dark') {
      root.classList.add('dark');
   } else {
      root.classList.remove('dark');
   }
}

function getPreferredTheme() {
   const stored = localStorage.getItem('theme');
   if (stored === 'dark' || stored === 'light') return stored;
   const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
   return prefersDark ? 'dark' : 'light';
}

window.initTheme = function () {
   applyTheme(getPreferredTheme());
};

window.toggleTheme = function () {
   const current = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
   const next = current === 'dark' ? 'light' : 'dark';
   localStorage.setItem('theme', next);
   applyTheme(next);
};

// Immediately apply theme as early as possible
if (typeof document !== 'undefined') {
   if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', window.initTheme);
   } else {
      window.initTheme();
   }
}
