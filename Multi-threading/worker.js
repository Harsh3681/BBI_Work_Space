

const {parentPort} = require("Worker_threads");

parentPort.on("Message", (jobs) =>{

for(let job of jobs){
    let co = 0;
    for(let i=0; i<job; i++){
     co++;
    }
}
    parentPort.postMessage("done");
})