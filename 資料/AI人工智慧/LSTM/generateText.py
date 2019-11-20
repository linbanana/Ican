from keras.models import load_model
import keras
import random
import sys
import numpy as np

path = keras.utils.get_file(
    'nietzsche.txt',
    origin='https://s3.amazonaws.com/text-datasets/nietzsche.txt')
text = open(path, encoding='utf-8').read().lower()
maxlen = 60
chars = sorted(list(set(text)))
char_indices = dict((char, chars.index(char)) for char in chars)

model = load_model(r'C:\Users\電子商務班\Desktop\資料\AI人工智慧\LSTM/my_model.h5')

#數學式
def sample(preds, temperatue=1.0):
    preds = np.array(preds).astype('float64')
    preds = np.log(preds) / temperatue
    exp_preds = np.exp(preds)
    preds = exp_preds / np.sum(exp_preds)
    probas = np.random.multinomial(1, preds, 1)
    return np.argmax(probas)


if __name__ == "__main__":
    start_index = random.randint(0, len(text) - maxlen - 1)
    generated_text = text[start_index: start_index + maxlen]
    print('--- Generating with seed:“ ' + generated_text + ' ”')
    for temperature in [0.2, 0.5, 1.0, 1.2]:
        print('-----temperature:', temperature)
        sys.stdout.write(generated_text)

        for i in range(400):
            sampled = np.zeros((1, maxlen, len(chars)))
            for t, char in enumerate(generated_text):
                sampled[0, t, char_indices[char]] = 1

            preds = model.predict(sampled, verbose=0)[0]
            next_index = sample(preds=preds, temperatue=temperature)
            next_char = chars[next_index]

            generated_text += next_char
            generated_text = generated_text[1:]

            sys.stdout.write(next_char)
            sys.stdout.flush()
        print()
