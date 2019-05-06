import sys
import pickle
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import LogisticRegression
from sklearn.model_selection import train_test_split
classifier=pickle.load(open('classifier',"rb"))
vectorizer=pickle.load(open('vectorizer',"rb"))

def check_fishing_link(input):
	data=[input]
	vect=vectorizer.transform(data).toarray()
	my_prediction=classifier.predict(vect)
	if(my_prediction=='good'):
		return 0;
	else:
		return 1;	
	
l=''.join(sys.argv[1:])
print(check_fishing_link(l))
