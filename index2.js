let myChart =document.getElementById('myChart').getContext('2d');
let masspopchart=new Chart(myChart,{
    type:'bar',
    data:{
        labels:['boston','worceter','springfield','lowell','cambridge'],
        datasets:[{
            label:'population',
            data:[134144,3123123,31232,3123,31231,323132]
        }]

    },
    options:{}
});


