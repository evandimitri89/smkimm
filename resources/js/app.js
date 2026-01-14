import "./bootstrap";

// Toggle Password Visibility
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".toggle-password").forEach((icon) => {
        icon.addEventListener("click", () => {
            const target = document.querySelector(icon.dataset.target);
            const isPassword = target.getAttribute("type") === "password";

            target.setAttribute("type", isPassword ? "text" : "password");
            icon.classList.toggle("bi-eye-fill");
            icon.classList.toggle("bi-eye-slash-fill");
        });
    });
});

// Dropdown Menu with Delay on Mouse Leave
document.querySelectorAll(".group").forEach((group) => {
    let timeout;
    const dropdown = group.querySelector(".absolute");

    if (!dropdown) return;

    group.addEventListener("mouseenter", () => {
        clearTimeout(timeout);
        dropdown.classList.remove("hidden");
    });

    group.addEventListener("mouseleave", () => {
        timeout = setTimeout(() => {
            dropdown.classList.add("hidden");
        }, 200);
    });
});

// Carousel
document.addEventListener("DOMContentLoaded", () => {
    const carouselContainer = document.getElementById("carouselContainer");
    const carouselTrack = document.getElementById("carouselTrack");

    if (!carouselContainer || !carouselTrack) return;

    carouselTrack.innerHTML += carouselTrack.innerHTML;

    let isDown = false;
    let startX;
    let scrollLeft;
    let maxScroll = carouselContainer.scrollWidth / 2;

    document.addEventListener("dragstart", (e) => {
        if (e.target.tagName === "IMG") e.preventDefault();
    });

    carouselContainer.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - carouselContainer.offsetLeft;
        scrollLeft = carouselContainer.scrollLeft;
    });

    carouselContainer.addEventListener("mouseleave", () => {
        isDown = false;
    });

    carouselContainer.addEventListener("mouseup", () => {
        isDown = false;
    });

    carouselContainer.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carouselContainer.offsetLeft;
        const walk = (x - startX) * 1.5;
        carouselContainer.scrollLeft = scrollLeft - walk;
        handleLoop();
    });

    let touchStartX = 0;
    let touchScrollLeft = 0;

    carouselContainer.addEventListener("touchstart", (e) => {
        touchStartX = e.touches[0].pageX - carouselContainer.offsetLeft;
        touchScrollLeft = carouselContainer.scrollLeft;
    });

    carouselContainer.addEventListener("touchmove", (e) => {
        const x = e.touches[0].pageX - carouselContainer.offsetLeft;
        const walk = (x - touchStartX) * 1.5;
        carouselContainer.scrollLeft = touchScrollLeft - walk;
        handleLoop();
    });

    // Fungsi supaya looping
    function handleLoop() {
        if (carouselContainer.scrollLeft >= maxScroll) {
            carouselContainer.scrollLeft = 0;
        } else if (carouselContainer.scrollLeft <= 0) {
            carouselContainer.scrollLeft = maxScroll;
        }
    }
});

// Flash Message Auto Dismiss
document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".hero-text");
    let index = 0;
    const intervalTime = 3000;

    function showNext() {
        slides[index].classList.remove("opacity-100");
        slides[index].classList.add("opacity-0");

        index = (index + 1) % slides.length;

        slides[index].classList.remove("opacity-0");
        slides[index].classList.add("opacity-100");
    }

    setInterval(showNext, intervalTime);
});

// Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menu-btn");
    const closeMenu = document.getElementById("close-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const submenuBtns = document.querySelectorAll(".mobile-submenu-btn");

    if (menuBtn && closeMenu && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("hidden");
            setTimeout(() => mobileMenu.classList.add("opacity-100"), 10);
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.remove("opacity-100");
            setTimeout(() => mobileMenu.classList.add("hidden"), 300);
        });
    }

    submenuBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            const submenu = btn.nextElementSibling;
            const arrow = btn.querySelector("i");
            submenu.classList.toggle("hidden");
            arrow.classList.toggle("rotate-180");
        });
    });
});

// Profile Picture Upload Handler
window.handleProfilePictureChange = function (event) {
    const file = event.target.files[0];
    if (!file) return;

    const allowed = ["image/jpeg", "image/jpg", "image/png"];
    if (!allowed.includes(file.type)) {
        alert(
            "Format file tidak didukung. Hanya JPG, JPEG, dan PNG yang diperbolehkan."
        );
        return;
    }

    const reader = new FileReader();
    reader.onload = (e) => {
        document.getElementById("profile_image").src = e.target.result;
    };
    reader.readAsDataURL(file);

    const formData = new FormData();
    formData.append("profile_picture", file);

    const uploadUrl = document.querySelector('meta[name="upload-url"]').content;
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    fetch(uploadUrl, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            console.log("Response:", data);
            if (data.success) {
                document.getElementById("profile_image").src =
                    URL.createObjectURL(file);
            } else {
                alert("❌ Gagal mengupload foto.");
            }
        })

        .catch((err) => {
            console.error("Upload error:", err);
            alert("Terjadi kesalahan saat upload foto.");
        });
};
