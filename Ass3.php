<script>
        fetch('https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('studentData');
                data.results.forEach(record => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${record.year}</td>
                        <td>${record.semester}</td>
                        <td>${record.the_programs}</td>
                        <td>${record.nationality}</td>
                        <td>${record.colleges}</td>
                        <td>${record.number_of_students}</td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
