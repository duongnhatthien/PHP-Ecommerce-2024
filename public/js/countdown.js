// Đặt thời gian kết thúc của sự kiện (format: YYYY-MM-DD HH:MM:SS)
const countdownDate = new Date("2024-12-31T23:59:59").getTime();

const countdownFunction = setInterval(() => {
  // Lấy thời gian hiện tại
  const now = new Date().getTime();

  // Tính thời gian còn lại
  const distance = countdownDate - now;

  // Tính số ngày, giờ, phút, giây còn lại
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Hiển thị kết quả trên trang web
  document.getElementById("days").innerText = days;
  document.getElementById("hours").innerText = hours;
  document.getElementById("minutes").innerText = minutes;
  document.getElementById("seconds").innerText = seconds;

  // Nếu thời gian đã hết, hiển thị thông báo và dừng đồng hồ
  if (distance < 0) {
    clearInterval(countdownFunction);
    document.querySelector(".countdown").innerHTML = "EXPIRED";
  }
}, 1000);
