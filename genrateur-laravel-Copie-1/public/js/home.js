// <!-- Fact Start -->
const counters = document.querySelectorAll('.counterEz');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target'); // Convert target to number
        const count = +counter.innerText; // Convert current text to number
        const increment = target / 450; // Adjust speed by changing denominator

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10); // Adjust interval for smoother/slower animation
        } else {
            counter.innerText = target; // Set to target to avoid overflow
        }
    };

    updateCount();
});

// <!-- Fact Start -->