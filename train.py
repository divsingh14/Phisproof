import pandas as pd   #for analysis

import pickle    #for arrangeing data in sequence
from sklearn.feature_extraction.text import TfidfVectorizer   #for data in matrix form
from sklearn.linear_model import LogisticRegression    #for prediction
from sklearn.model_selection import train_test_split

def predict():
	urls_data = pd.read_csv('urldata.csv')               	#load list
	y = urls_data['label']									#store label to y
	url_list = urls_data['url']								#store url to url list
	vectorizer = TfidfVectorizer()							#create vectorizer
	x = vectorizer.fit_transform(url_list)					#store url list in matrix form
	x_train,x_test,y_train,y_test = train_test_split(x,y,test_size=0.2,random_state=42)    #slpit
	Logit = LogisticRegression()
	Logit.fit(x_train,y_train)         #logic

	from sklearn.naive_bayes import MultinomialNB
	clf = MultinomialNB()
	clf.fit(x_train,y_train)
	clf.score(x_test,y_test)
	pickle.dump(clf,open("classifier",'wb'))			#create classifier
	pickle.dump(vectorizer,open("vectorizer",'wb'))		#create vectorizer
	return
	
predict()