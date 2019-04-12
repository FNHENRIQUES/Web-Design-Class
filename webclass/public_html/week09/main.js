var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'usa.txt');
ourRequest.onload = function(){
  console.log(ourRequest.responseText);
};
ourRequest.send();