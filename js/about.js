/* -------------------------------
  ハンファについて スロットアニメーション
------------------------------- */
Odometer.options = {
	format: "d", // カンマ区切りを除去
};

document.addEventListener("DOMContentLoaded", function () {
	// 設立
	const odom1 = document.getElementById("odometer-build");
	const observer1 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom1.innerHTML = 1952;
					observer1.unobserve(odom1); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer1.observe(odom1);

	// 売上高
	const odom2 = document.getElementById("odometer-sales");
	const observer2 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom2.innerHTML = 9;
					observer2.unobserve(odom2); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer2.observe(odom2);

	// 系列社数
	const odom3 = document.getElementById("odometer-series");
	const observer3 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom3.innerHTML = 103;
					observer3.unobserve(odom3); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer3.observe(odom3);

	// グローバルネットワーク
	const odom4 = document.getElementById("odometer-part");
	const observer4 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom4.innerHTML = 776;
					observer4.unobserve(odom4); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer4.observe(odom4);

	// 総資産基準
	const odom5 = document.getElementById("odometer-assets");
	const observer5 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom5.innerHTML = 7;
					observer5.unobserve(odom5); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer5.observe(odom5);

	// “フォーチュン・グローバル500”
	const odom6 = document.getElementById("odometer-global");
	const observer6 = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					odom6.innerHTML = 372;
					observer5.unobserve(odom6); //停止 odometer
				}
			});
		},
		{
			threshold: 0.5, // 50% 表示されたときに発火
		}
	);
	observer6.observe(odom6);
});
