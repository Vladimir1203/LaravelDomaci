let startMealPlan=document.getElementById('mealButton');
let mealPlanForm=document.getElementsByClassName('mealPlanForm')[0];

startMealPlan.addEventListener('click',()=>{
    mealPlanForm.style.display='inline-block';
});