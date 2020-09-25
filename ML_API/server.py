import sys
import joblib
from flask import Flask, jsonify, request
from sklearn import preprocessing
import pandas as pd
import traceback

app = Flask(__name__)

def servDataPreprocessing(data):
    print("Started preprocessing")
    data['Wired/Wireless'] = data['Wired/Wireless'].replace({"Wired ": "Wired", "wireless": "Wireless"})
    data['Type of Product'] = data['Type of Product'].replace(
        {"H Disk": "HDisk", "Hdisk": "HDisk", "Headphones": "Headphone"})
    data['Antivirus_binned'] = data['Antivirus_binned'].replace({"NO": "0", "No": "0", "no": 0})
    data['Faulty software'] = data['Faulty software'].astype('category')
    data['Faulty hardware'] = data['Faulty hardware'].astype('category')
    data['Type of Product'] = data['Type of Product'].astype('category')
    data['Antivirus_binned'] = data['Antivirus_binned'].astype('int64')
    data['Services Used'] = data['Services Used'].astype('category')
    data['Wired/Wireless'] = data['Wired/Wireless'].astype('category')
    data['Type of Product'] = data['Type of Product'].astype('category')

    LE = preprocessing.LabelEncoder()
    data['Faulty software'] = LE.fit_transform(data['Faulty software'])
    data['Faulty hardware'] = LE.fit_transform(data['Faulty hardware'])
    data['Services Used'] = LE.fit_transform(data['Services Used'])
    data['Wired/Wireless'] = LE.fit_transform(data['Wired/Wireless'])
    data['Type of Product'] = LE.fit_transform(data['Type of Product'])

    bins = [-0.9, 0.9, 2, 10]
    labels = [1, 2, 3]
    data['Purchase_binned'] = pd.cut(data['Purchase_binned'], bins=bins, labels=labels)

    print("Somewhat preprocessing")

    bins = [-0.9, 3, 6, 50]
    labels = [1, 2, 3]
    data['Warranty_binned'] = pd.cut(data['Warranty_binned'], bins=bins, labels=labels)

    print("Almost preprocessing")

    bins = [-1.9, -1, 6, 50]
    labels = [1, 2, 3]
    data['Backup_binned'] = pd.cut(data['Backup_binned'], bins=bins, labels=labels)

    bins = [-1.9, -1, 0.9, 2, 50]
    labels = [1, 2, 3, 4]
    data['Antivirus_binned'] = pd.cut(data['Antivirus_binned'], bins=bins, labels=labels)

    bins = [-0.9, 6, 50]
    labels = [1, 2]
    data['Tickets_binned'] = pd.cut(data['Tickets_binned'], bins=bins, labels=labels)

    bins = [-1.9, -0.9, 1.9, 50]
    labels = [1, 2, 3]
    data['Update_period_binned'] = pd.cut(data['Update_period_binned'], bins=bins, labels=labels)
    print("Processed")
    return data


def servRetDataPreprocessing(data):
    data['Service Recommended1'].unique()
    data['Service Recommended2'].unique()
    data['Service Recommended3'].unique()

    data['Faulty software'].unique()
    data['Faulty hardware'].unique()
    data['Wired/Wireless'].unique()
    data['Type of Product'].unique()

    data['Service Recommended1'] = data['Service Recommended1'].replace({"PSP ": "PSP"})
    data['Wired/Wireless'] = data['Wired/Wireless'].replace({"Wired ": "Wired", "wireless": "Wireless"})
    data['Type of Product'] = data['Type of Product'].replace(
        {"H Disk": "HDisk", "Hdisk": "HDisk", "Headphones": "Headphone"})
    data['Antivirus_binned'] = data['Antivirus_binned'].replace({"NO": "0"})

    data['Faulty software'] = data['Faulty software'].astype('category')
    data['Faulty hardware'] = data['Faulty hardware'].astype('category')
    data['Type of Product'] = data['Type of Product'].astype('category')
    data['Antivirus_binned'] = data['Antivirus_binned'].astype('int64')
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

    bins = [-0.9, 0.9, 2, 10]
    labels = [1, 2, 3]
    data['Purchase_binned'] = pd.cut(data['Purchase_binned'], bins=bins, labels=labels)

    print("Somewhat preprocessing")

    bins = [-0.9, 3, 6, 50]
    labels = [1, 2, 3]
    data['Warranty_binned'] = pd.cut(data['Warranty_binned'], bins=bins, labels=labels)

    print("Almost preprocessing")

    bins = [-1.9, -1, 6, 50]
    labels = [1, 2, 3]
    data['Backup_binned'] = pd.cut(data['Backup_binned'], bins=bins, labels=labels)

    bins = [-1.9, -1, 0.9, 2, 50]
    labels = [1, 2, 3, 4]
    data['Antivirus_binned'] = pd.cut(data['Antivirus_binned'], bins=bins, labels=labels)

    bins = [-0.9, 6, 50]
    labels = [1, 2]
    data['Tickets_binned'] = pd.cut(data['Tickets_binned'], bins=bins, labels=labels)

    bins = [-1.9, -0.9, 1.9, 50]
    labels = [1, 2, 3]
    data['Update_period_binned'] = pd.cut(data['Update_period_binned'], bins=bins, labels=labels)

    data['Wired/Wireless'] = data['Wired/Wireless'].astype('category')
    data['Services Used'] = data['Services Used'].astype('category')
    data['Faulty software'] = data['Faulty software'].astype('category')
    data['Faulty hardware'] = data['Faulty hardware'].astype('category')
    data['Type of Product'] = data['Type of Product'].astype('category')
    data['Service Recommended1'] = data['Service Recommended1'].astype('category')
    data['Service Recommended2'] = data['Service Recommended1'].astype('category')
    data['Service Recommended3'] = data['Service Recommended1'].astype('category')

    print(data.columns)
    return data.copy()

@app.route('/servPredict', methods=['POST'])
def servPredict():
    model = joblib.load("serv_rec_model.pkl")
    print('Model loaded')
    model_columns = joblib.load("serv_rec_model_columns.pkl")
    print('Model columns loaded')
    if model:
        try:
            json_ = request.get_json(force=True)
            query = pd.DataFrame(json_)
            query = query.reindex(columns=model_columns, fill_value=0)
            predict = list()
            for index, rows in query.iterrows():
                lol = pd.DataFrame([rows])
                lol = servDataPreprocessing(lol)
                predict.append(model.predict(lol)[0])
            return jsonify({'prediction': str(predict)})
        except:

            return jsonify({'trace': traceback.format_exc()})
    else:
        print('Train the model first')
        return ('No model here to use')



@app.route('/servRetPredict', methods=['POST'])
def servRetPredict():
    model = joblib.load("serv_ret_model.pkl")
    print('Model loaded')
    model_columns = joblib.load("serv_ret_model_columns.pkl")
    print('Model columns loaded')
    if model:
        try:
            json_ = request.get_json(force=True)
            query = pd.DataFrame(json_)
            query = query.reindex(columns=model_columns, fill_value=0)
            predict = list()
            for index, rows in query.iterrows():
                lol = pd.DataFrame([rows])
                lol = servRetDataPreprocessing(lol)
                predict.append(model.predict(lol)[0])
            return jsonify({'prediction': str(predict)})
        except:

            return jsonify({'trace': traceback.format_exc()})
    else:
        print('Train the model first')
        return ('No model here to use')



if __name__ == '__main__':
    try:
        port = int(sys.argv[1])
    except:
        port = 8080
    app.run(port=port, debug=True)
