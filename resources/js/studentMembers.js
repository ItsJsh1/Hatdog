document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchInput').addEventListener('input', function () {
      const searchQuery = this.value.toLowerCase();
      const rows = document.querySelectorAll('#membersTable tbody tr'); 
  
      rows.forEach((row) => {
        const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        const callsign = row.querySelector('td:nth-child(3)').textContent.toLowerCase(); 
        const region = row.querySelector('td:nth-child(4)').textContent.toLowerCase(); 
  
        if (name.includes(searchQuery) || callsign.includes(searchQuery) || region.includes(searchQuery)) {
          row.style.display = ''; 
        } else {
          row.style.display = 'none'; 
        }
      });
    });
  
    const toggleColumns = (columnIndex, isVisible) => {
      const columns = document.querySelectorAll(`.toggle-column[data-column="${columnIndex}"]`);
      columns.forEach((column) => {
        column.style.display = isVisible ? '' : 'none';
      });
    };
  
    document.getElementById('toggleRecNum').addEventListener('change', (e) => {
      toggleColumns(0, e.target.checked);
    });
  
    document.getElementById('toggleRecName').addEventListener('change', (e) => {
      toggleColumns(1, e.target.checked);
    });
  
    document.getElementById('toggleCallsign').addEventListener('change', (e) => {
      toggleColumns(2, e.target.checked);
    });
  
    document.getElementById('toggleRegion').addEventListener('change', (e) => {
      toggleColumns(3, e.target.checked);
    });
  
    document.getElementById('toggleSection').addEventListener('change', (e) => {
      toggleColumns(4, e.target.checked);
    });
  });