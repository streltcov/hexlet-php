#
# Терминал
#
# Создайте следующую файловую структуру внутри папки fs:
#
# fs
# ├── example1
# │   ├── file
# │   └── subexample
# │       ├── file
# │       └── folder
# |           └── another_file
# └── example2
#     └── another_file
#
# Подсказка
#
#     В названии файлов всегда присутствует слово file, все остальное — это директории

mkdir -p fs/example1/subexample/folder && mkdir -p fs/example2 && touch fs/example1/file &&
 touch fs/example1/subexample/file && touch fs/example1/subexample/folder/another_file && touch fs/example2/another_file