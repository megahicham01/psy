import sys
import os

# إضافة مسار site-packages الخاص بالمستخدم
sys.path.append(r"C:\Users\h\AppData\Roaming\Python\Python312\site-packages")

from moviepy.editor import VideoFileClip, vfx

# المجلد الرئيسي
main_folder = r"C:\xampp\htdocs\PSY\New folder"

# امتدادات الفيديو التي سيتم معالجتها
video_extensions = (".mp4", ".mov", ".avi", ".mkv", ".flv")  # يمكنك إضافة المزيد

# المرور على كل المجلدات والمجلدات الفرعية
for root, dirs, files in os.walk(main_folder):
    for file in files:
        if file.lower().endswith(video_extensions):
            input_file = os.path.join(root, file)
            file_root, file_ext = os.path.splitext(input_file)
            output_file = f"{file_root}_reverse{file_ext}"
            try:
                print(f"🔄 معالجة: {input_file}")
                clip = VideoFileClip(input_file)
                # عمل reverse للفيديو فقط
                reversed_clip = clip.fx(vfx.time_mirror)
                # حفظ الفيديو المعكوس بدون صوت
                reversed_clip.write_videofile(output_file, audio=False, codec="libx264")
                # تحرير الموارد
                clip.close()
                reversed_clip.close()
                print(f"✅ تم إنشاء النسخة المعكوسة: {output_file}\n")
            except Exception as e:
                print(f"❌ خطأ أثناء معالجة {input_file}: {e}\n")

print("🎉 تم الانتهاء من معالجة جميع الفيديوهات.")
