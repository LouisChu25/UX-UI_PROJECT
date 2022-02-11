// Custome class constructor
class Customer {
	constructor(name, location, img) {
		this.name = name;
		this.location = location;
		this.img = img;
	}
}


class Review {
	constructor(name, review, imgLink, rating) {
		this.name = name;
		this.imgLink = imgLink;
		this.review = review;
		this.rating = rating;
	}
}

// clients info 
let jackson = new Customer(
	"Jackson",
	"Seattle",
	"https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
);
let jennifer = new Customer(
	"Jennifer",
	"Atlanta",
	"https://images.pexels.com/photos/428321/pexels-photo-428321.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
);
let philip = new Customer(
	"Philip",
	"New York City",
	"https://images.pexels.com/photos/941693/pexels-photo-941693.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
);


let fakeDataReturn = [
    new Review(
        philip.name,
        "Formation que j'ai beaucoup apprécié, elle m'a permis de réaliser mon portfolio et de le mettre en ligne.",
        philip.img,

    ),
    new Review(
        jennifer.name,
        "Travaillant dans la photographie, j'avais besoin d'un site pour mettre en avant mon travail, cette formation m'a beaucoup aidé",
        jennifer.img,

    ),
    new Review(
        jackson.name,
        "Etant un grand fan de jeux vidéos, j'ai toujours voulu pouvoir en créer un, j'ai beaucoup aimé la formation",
        jackson.img,

    )
];


//
function addReview(customer, rating, review) {
	let newReview = new Review(customer.name, review, customer.img, rating);
	fakeDataReturn.push(newReview);
}


//
// SLIDER 
//
(function () {
	// container elements
	let sliderContainer = document.querySelector(".slider-container");
	let reviewBar = document.querySelector(".review-bar");

	// review details elements
	let ratingEl = document.querySelector(".rating-container");
	let nameEl = document.querySelector(".review-bar h4");
	let reviewEl = document.querySelector(".review-bar p");

	// button elements
	let prevBtn = document.querySelector("#prevBtn");
	let nextBtn = document.querySelector("#nextBtn");

	// variables
	let index = 0;
	let reviewsArr = fakeDataReturn;

	
	setReview(index);

	
	function changeSlide(direction) {
		if (direction === "next") {
			if (index === reviewsArr.length - 1) {
				index = 0;
				setReview(index);
			} else {
				index++;
				setReview(index);
			}
		} else {
			if (index === 0) {
				index = reviewsArr.length - 1;
				setReview(index);
			} else {
				index--;
				setReview(index);
			}
		}
	}

	
	function setReview(reviewIndex) {
		let review = reviewsArr[reviewIndex];
		sliderContainer.style.backgroundImage = `url(${review.imgLink})`;
		nameEl.textContent = review.name;
		reviewEl.textContent = review.review;
		ratingEl.innerHTML = generateRatingStarsHtml(review.rating);
	}

	
	function generateRatingStarsHtml(rating) {
		let stars = ``;
		for (let i = 0; i < rating; i++) {
			stars += `<i class="fas fa-star"></i>`;
		}
		return stars;
	}
	
	prevBtn.addEventListener("click", () => changeSlide("prev"));
	nextBtn.addEventListener("click", () => changeSlide("next"));
})();
