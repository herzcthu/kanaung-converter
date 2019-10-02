# kanaung-converter
This converter can be used to convert various Burmese encoding from one to another.

# Instruction
See test file to know how to use this.

# Adding more rules

- implement Kanaung/Rules/RulesInterface
- Converter will look for rule class in this name format -
"Kanaung\\Rules\\". ucfirst($from) . ucfirst($to) . "Rules"