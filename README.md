
📌 AUTH MODULE: SMS ORQALI RO‘YXATDAN O‘TISH VA LOGIN

✅ 1. RO‘YXATDAN O‘TISH (REGISTER)

- Foydalanuvchi quyidagi maydonlar bilan ro‘yxatdan o‘tadi:
  - name (ism)
  - last_name (familiya)
  - phone (telefon raqami)
  - avatar (ixtiyoriy rasm)
- Ro’yxatdan o‘tgach, foydalanuvchiga 5 xonali SMS kod yuboriladi.
- Ushbu kod:
  - Faqat 1 daqiqa amal qiladi.
  - 1 daqiqadan so‘ng yaroqsiz bo‘ladi.
- Foydalanuvchi kodni muvaffaqiyatli tasdiqlaganidan so‘nggina yakuniy ro‘yxatdan o‘tadi (is_verified = true).

🔐 2. KIRISH (LOGIN)

- Foydalanuvchi faqat telefon raqami orqali login qilishi mumkin.
- Telefon raqami yuborilgach, unga 5 xonali SMS kod yuboriladi (1 daqiqalik amal muddati bilan).
- Kodni to‘g‘ri tasdiqlaganidan so‘ng login amalga oshiriladi.
- Eslatma: Agar foydalanuvchi hali telefon raqamini tasdiqlamagan bo‘lsa — login qilishga ruxsat yo‘q.

🔁 3. SMS KODNI QAYTA YUBORISH

- Har bir telefon raqami uchun 1 daqiqada faqat 1 marta kod yuborilishi kerak.
- Avvalgi yuborilgan kod ham 1 daqiqa amal qiladi.
- Qayta yuborish faqat vaqt o‘tgach ruxsat etiladi.

☎️ 4. TELEFON RAQAMINI ALMASHTIRISH

- Tizimga kirgan foydalanuvchi o‘zining telefon raqamini yangilashi mumkin.
- Yangi raqam:
  - Bazada ilgari ro‘yxatdan o‘tmagan bo‘lishi kerak.
  - Yangi raqamga ham 5 xonali tasdiqlovchi SMS kod yuboriladi (1 daqiqalik amal muddati bilan).
  - Kod tasdiqlansa, eski raqam yangisiga almashtiriladi.

🧹 5. AVTOMATIK TOZALASH (CLEAN-UP)

- Telefon raqamini 3 kun ichida tasdiqlamagan foydalanuvchilarni bazadan avtomatik tarzda o‘chirib borish kerak.
  - Masalan: background job yoki cron orqali.

⚙️ ISHLATILISHI SHART:

- Repository Pattern ishlatilsin
- Service Layer arxitekturasi qo‘llanilsin
- DTO (Data Transfer Object) lar orqali ma’lumotlar uzatilishi kerak
- Advanced Response formatlari (standart success/error wrapper) bo‘lishi kerak
- Laravel Resource lar orqali API response formatlansin
