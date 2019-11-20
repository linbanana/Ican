import numpy as np

text = 'The cat sat on the mat. The dog ate my homework.'


chars = sorted(list(set(text)))
char_indices = dict((char, chars.index(char)) for char in chars)
print(char_indices['T'])
print(char_indices['h'])
print(char_indices['e'])