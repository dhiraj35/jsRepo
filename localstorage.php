<script>
 //set up local storge data    
localStorage.setItem('name','Dhiraj');
localStorage.setItem('age','28');
// set UP Array Data In Local storage
let nameArr = ['Dhiraj','Deepak'];
localStorage.setItem('nameArr',JSON.stringify(nameArr));
console.log(JSON.parse(localStorage.getItem('nameArr')));
// fetch data from local storage 
console.log(localStorage.getItem('name'));
//Remove Data from localstorage 
localStorage.removeItem('age');
</script>