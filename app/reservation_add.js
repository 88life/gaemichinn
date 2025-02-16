function payment(){
  var popupW = 1000;
  var popupH = 600;
  var left = Math.ceil((window.screen.width - popupW)/2);
  var top = Math.ceil((window.screen.height - popupH)/3);

  window.open("payment.php", "a",'width='+popupW+',height='+popupH+',left='+left+',top='+top+',scrollbars=yes,resizable=no,toolbar=no,titlebar=no,menubar=no,location=no');
}



let adultbase = 0;
let people = 0;
const adult = document.querySelector('#adult');

function minus_adult() {
  people--;
    if(adultbase>0){
        adultbase--;
        adult.textContent = adultbase;
    }
}   

function plus_adult() {
  people++;
  if(people <=12){
    adultbase++;
    adult.textContent = adultbase;
  }
  else if(people == 13){
    alert("인원수는 12명 제한입니다.");
    people--;
  }
}

let childbase = 0;
const child = document.querySelector('#child');
function minus_child() {
  people--;
  if(childbase>0){
      childbase--;
      child.textContent = childbase;
  }
}   

function plus_child() {
  people++;
  if(people <=12){
  childbase++;
  child.textContent = childbase;
  }
  else if(people == 13){
    alert("인원수는 12명 제한입니다.");
    people--;
  }
}

let babybase = 0;
const baby = document.querySelector('#baby');
function minus_baby() {
  people--;
  if(babybase>0){
      babybase--;
      baby.textContent = babybase;
  }
}   

function plus_baby() {
  people++;
  if(people <=12){
  babybase++;
  
  baby.textContent = babybase;
  }
  else if(people == 13){
    alert("인원수는 12명 제한입니다.");
    people--;
  }
}



let summ = 0;

let count1 = 0;
let cost1 = 0;
const costTag1 = document.querySelector('#result1');
const price1 = document.querySelector('.price1');

function minus1() {
  if(cost1 > 0){
  count1--;
  cost1--;
  summ--;
  costTag1.textContent = count1;
  price1.textContent = cost1;
  document.querySelector('.result').textContent -= 1;
  }
}

function plus1() {
  if(cost1<12){
  count1++;
  cost1++;
  summ++;
  costTag1.textContent = count1;
  price1.textContent = cost1;
  }
}



let count2 = 1;
let cost2 = 30000;
const costTag2 = document.querySelector('#result2');
const price2 = document.querySelector('.price2');

function minus2() {
  if(cost2 > 0){

  count2--;
  cost2 -=30000;
  costTag2.textContent = count2;
  price2.textContent = cost2;
  const const22 = 30000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)-parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
  }
}
function plus2() {
  count2++;
  cost2 +=30000;
  costTag2.textContent = count2;
  price2.textContent = cost2;

  const const22 = 30000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)+parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
}

document.addEventListener('DOMContentLoaded', function() {
  costTag2.textContent = count2;
  price2.textContent = cost2;
});

let count3 = 1;
let cost3 = 50000;
const costTag3 = document.querySelector('#result3');
const price3 = document.querySelector('.price3');

function minus3() {
  if(cost3 > 1){
  count3--;
  cost3 -= 50000;
  costTag3.textContent = count3;
  price3.textContent = cost3;

  const const22 = 50000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)-parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
  }
}
function plus3() {
  count3++;
  cost3 += 50000;
  costTag3.textContent = count3;
  price3.textContent = cost3;

  const const22 = 50000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)+parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
}

let count4 = 1;
let cost4 = 70000;
const costTag4 = document.querySelector('#result4');
const price4 = document.querySelector('.price4');

function minus4() {
  if(cost4 > 0){
  count4--;
  cost4-=70000;
  costTag4.textContent = count4;
  price4.textContent = cost4;

  const const22 = 70000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)-parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
  }
}
function plus4() {
  count4++;
  cost4 +=70000;
  costTag4.textContent = count4;
  price4.textContent = cost4;

  const const22 = 70000;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)+parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
}

let count5 = 1;
let cost5 = 1;
const costTag5 = document.querySelector('#result5');
const price5 = document.querySelector('.price5');

function minus5() {
  if(cost5 > 0){
  count5--;
  cost5--;
  costTag5.textContent = count5;
  price5.textContent = cost5;

  const const22 = 1;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)-parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
  }
}

function plus5() {
  if(cost5<12){
  count5++;
  cost5++;
  costTag5.textContent = count5;
  price5.textContent = cost5;

  const const22 = 1;
  const result = document.querySelector('.result').textContent;
  const resultt = parseInt(result)+parseInt(const22);
  
  document.querySelector('.result').textContent =resultt ;
  }
}


    document.addEventListener('DOMContentLoaded', function() {
    const price1 = document.querySelector('.price1').textContent;
    const price1_1 = parseInt(price1);
  
    const price2 = document.querySelector('.price2').textContent;
    const price2_1 = parseInt(price2);
  
    const price3 = document.querySelector('.price3').textContent;
    const price3_1 = parseInt(price3);
  
    const price4 = document.querySelector('.price4').textContent;
    const price4_1 = parseInt(price4);
  
    const price5 = document.querySelector('.price5').textContent;
    const price5_1 = parseInt(price5);
  
    sum = price1_1 + price2_1 + price3_1 + price4_1 + price5_1;
    
    document.querySelector('.result').textContent = sum;
  });