function showLoginModal() {
    if (logged){
    document.getElementById('reviewForm').style.display = 'block';
    }
    else{
    document.getElementById('loginModal').classList.add('show');
    }
}
    
function hideLoginModal() {
    document.getElementById('loginModal').classList.remove('show');
}

function hideReviewForm(){
    document.getElementById('reviewForm').style.display = 'none'
}

async function submitReview() {
    let review = document.getElementById("reviewText").value.trim();

    if (review === "") {
        alert("Write something before submitting");
        return;
    }

    try {
        const res = await fetch('http://127.0.0.1:5000/api/reviews', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            credentials: 'include',
            body: JSON.stringify({
                placeID: placeId,
                comment: review,
                rating: 5
            })
        });

        if (!res.ok) {
            alert("Failed to submit review");
            return;
        }

        alert("Review submitted!");
        document.getElementById("reviewText").value = "";
    } catch (e) {
        alert("Error sending review");
    }
}




