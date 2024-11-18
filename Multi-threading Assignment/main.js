
let workers = [];
let isCancelled = false;

document.getElementById("singleThreadBtn").addEventListener("click", () => {
    const limit = parseInt(document.getElementById("limit").value);
    isCancelled = false;
    runSingleThreaded(limit);
});

document.getElementById("multiThreadBtn").addEventListener("click", () => {
    const limit = parseInt(document.getElementById("limit").value);
    isCancelled = false;
    runMultiThreaded(limit);
});

document.getElementById("cancelBtn").addEventListener("click", () => {
    cancelOperation();
});

function runSingleThreaded(limit) {
    const start = performance.now();
    const primes = calculatePrimes(1, limit);
    const end = performance.now();

    document.getElementById("output").innerText = 
        `Single-threaded completed in ${(end - start).toFixed(2)} ms. Found ${primes.length} primes.`;
}

function runMultiThreaded(limit) {
    document.getElementById("cancelBtn").disabled = false;
    const start = performance.now();
    console.log('Start ',start);
    
    const range = Math.ceil(limit / 4);
    
    let completedWorkers = 0;
    let allPrimes = [];
    
   
    for (let i = 0; i < 4; i++) {
        const worker = new Worker("worker-thread.js");
        workers.push(worker);

        const startRange = i * range + 1;
        const endRange = i === 3 ? limit : (i + 1) * range;
        
        worker.postMessage({ start: startRange, end: endRange });
        
        worker.onmessage = (event) => {
            console.log(`${i+1} worker thread time :- ${performance.now()}`);
            
            if (isCancelled) return;
            
            allPrimes = allPrimes.concat(event.data.primes);
            completedWorkers++;
            
            updateProgress((completedWorkers / 4) * 100);
            
            if (completedWorkers === 4) {
                const end = performance.now();
                console.log('End ',end);
                document.getElementById("output").innerText = 
                `Multi-threaded completed in ${(end - start).toFixed(2)} ms. Found ${allPrimes.length} primes.`;
                document.getElementById("cancelBtn").disabled = true;
            }
        };
        
        worker.onerror = (err) => {
            console.error(`Worker error: ${err.message}`);
            cancelOperation();
        };
    }
}

function cancelOperation() {
    isCancelled = true;
    document.getElementById("cancelBtn").disabled = true;
    workers.forEach(worker => worker.terminate());
    workers = [];
    updateProgress(0);
    document.getElementById("output").innerText = "Operation cancelled.";
}

function updateProgress(value) {
    document.getElementById("progressBar").value = value;
}


