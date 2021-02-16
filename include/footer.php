<footer>
  <p>Designed by NA | cocoao.dothome.co.kr/my_schedule</p>
</footer>

<!-- <script>
  const rateNum=document.querySelectorAll('.rateNum');

  for (let i=0; i<rateNum.length; i++){
    console.log(rateNum[1]);
  }

</script> -->
<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector("#title");
  const rateNum = document.querySelectorAll('.rateNum');

  if(pathname.includes("input_form")){
    changeTit.innerText="Schedule Input";
    for(let i=0; i<rateNum.length; i++){
      rateNum[i].readOnly=true;
    }
  } else if(pathname.includes("sch_view")){
    changeTit.innerText="Schedule Board";
  } else if(pathname.includes("detail_view")){
    changeTit.innerText="Detail Schedule";
  }
</script>
