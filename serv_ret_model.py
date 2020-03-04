import numpy as np
import pandas as pd
import pickle
import joblib
from sklearn import preprocessing
data = pd.read_csv("serv_ret.csv")

data['Service Recommended1'].unique()
data['Service Recommended2'].unique()
data['Service Recommended3'].unique()

data['Faulty software'].unique()
data['Faulty hardware'].unique()
data['Wired/Wireless'].unique()
data['Type of Product'].unique()

data['Service Recommended1'] = data['Service Recommended1'].replace({"PSP ":"PSP"})
data['Wired/Wireless'] = data['Wired/Wireless'].replace({"Wired ":"Wired", "wireless":"Wireless"})
data['Type of Product'] = data['Type of Product'].replace({"H Disk":"HDisk", "Hdisk":"HDisk", "Headphones":"Headphone"})
data['Antivirus Purchase (yrs)'] = data['Antivirus Purchase (yrs)'].replace({"NO":"0"})

data = data.drop(['Puchase Date', 'Last Update'], axis=1, inplace=False )

data['Faulty software'] = data['Faulty software'].astype('category')
data['Faulty hardware'] = data['Faulty hardware'].astype('category')
data['Type of Product'] = data['Type of Product'].astype('category')
data['Antivirus Purchase (yrs)'] = data['Antivirus Purchase (yrs)'].astype('int64')
data['Services Used'] = data['Services Used'].astype('category')
data['Wired/Wireless'] = data['Wired/Wireless'].astype('category')
data['Service Recommended1'] = data['Service Recommended1'].astype('category')
data['Service Recommended2'] = data['Service Recommended2'].astype('category')
data['Service Recommended3'] = data['Service Recommended3'].astype('category')
data['Type of Product'] = data['Type of Product'].astype('category')

LE = preprocessing.LabelEncoder()

data['Faulty software'] = LE.fit_transform(data['Faulty software'])
data['Faulty hardware'] = LE.fit_transform(data['Faulty hardware'])
data['Services Used'] = LE.fit_transform(data['Services Used'])
data['Wired/Wireless'] = LE.fit_transform(data['Wired/Wireless'])
data['Service Recommended1'] = LE.fit_transform(data['Service Recommended1'])
data['Service Recommended2'] = LE.fit_transform(data['Service Recommended2'])
data['Service Recommended3'] = LE.fit_transform(data['Service Recommended3'])
data['Type of Product'] = LE.fit_transform(data['Type of Product'])

bins = [-0.9,0.9,2,10]
labels = [1,2,3]
data['Purchase_binned'] = pd.cut(data['Purchase Interval'], bins=bins, labels=labels)

bins = [-0.9,3,6,50]
labels = [1,2,3]
data['Warranty_binned'] = pd.cut(data['Warranty Expiry (months)'], bins=bins, labels=labels)

bins = [-1.9,-1,6,50]
labels = [1,2,3]
data['Backup_binned'] = pd.cut(data['Last BackUp'], bins=bins, labels=labels)

bins = [-1.9,-1,0.9,2,50]
labels = [1,2,3,4]
data['Antivirus_binned'] = pd.cut(data['Antivirus Purchase (yrs)'], bins=bins, labels=labels)

bins = [-0.9,6,50]
labels = [1,2]
data['Tickets_binned'] = pd.cut(data['Number of Tickets raised'], bins=bins, labels=labels)

bins = [-1.9,-0.9,1.9,50]
labels = [1,2,3]
data['Update_period_binned'] = pd.cut(data['Update Period'], bins=bins, labels=labels)

columns_to_drop=["Purchase Interval",'Warranty Expiry (months)','Last BackUp','Antivirus Purchase (yrs)','Number of Tickets raised','Update Period']

data = data.drop(columns_to_drop,axis=1,inplace=False)

data['Wired/Wireless'] = data['Wired/Wireless'].astype('category') 
data['Services Used'] = data['Services Used'].astype('category') 
data['Faulty software'] = data['Faulty software'].astype('category') 
data['Faulty hardware'] = data['Faulty hardware'].astype('category') 
data['Type of Product'] = data['Type of Product'].astype('category') 
data['Service Recommended1'] = data['Service Recommended1'].astype('category') 
data['Service Recommended2'] = data['Service Recommended1'].astype('category') 
data['Service Recommended3'] = data['Service Recommended1'].astype('category')


# # Pickle model columns
# data = data.drop(['Retention'],axis=1,inplace=False)
# print(data.columns)
# model_columns = list(data.columns)
# joblib.dump(model_columns, 'serv_ret_model_columns.pkl')
# print("Models columns dumped!")

# columns_to_encode = list(data.select_dtypes(include=['category']))     #One_hot_encoding
# data = pd.get_dummies(data, columns = columns_to_encode, drop_first=True)


dataset = data.copy()

y = dataset['Retention']

X = dataset.drop(['Retention'],axis=1,inplace=False)
# Pickle model columns
print(X.columns)
model_columns = list(X.columns)
joblib.dump(model_columns, 'serv_ret_model_columns.pkl')
print("Models columns dumped!")


from sklearn.model_selection import train_test_split          #Splitting the data
X_train, X_test, y_train, y_test = train_test_split(X, y, stratify=y, test_size=0.2, random_state = 123)

from sklearn.linear_model import LinearRegression
from sklearn import metrics
from sklearn.metrics import mean_squared_error,r2_score
from sklearn.ensemble import RandomForestRegressor

model = RandomForestRegressor(n_estimators = 1000, random_state = 42)
model.fit(X_train, y_train)

pickle.dump(model, open('serv_ret_model.pkl', 'wb'))
print("Model dumped!")


prediction = model.predict(X_test)

errors = abs(prediction-y_test)
error = np.mean(errors)
print("Error:")
print(error)

mape = 100*(errors/prediction)
print("mape:")
print(mape)

accuracy = 100-np.mean(mape)
print("Accuracy:")
print(accuracy)

rmse = mean_squared_error(y_test,prediction)
print("Rmse:")
print(rmse)

data['Retention'].mean()
