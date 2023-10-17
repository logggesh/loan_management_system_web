function calc(){
    let amount=getElementbyId("amount").value;
    let months=getElementbyId("no-of-months").value;
    let value=amount/months;
    document.getElementbyId("valueset")="Amount: "+value;
}