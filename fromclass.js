/*<script>
// The FETCH method requires a string parameter. It can be either a file path or URL
// to where the data is coming from.
fetch('datasheet.php')
 .then(response => response.json())
 .then(data => data.map(d => {
//document.querySelector('#clients').innerHTML += "<li>" + d.name + " " + d.email + "</li>";
document.querySelector('#clients').innerHTML += `<li style="font-size: 18px;"> ${d.firstName} | ${d.contactInfo} </li>`;
 }));
</script>
<div class="container">
<ol id="users">
</ol>
</div>