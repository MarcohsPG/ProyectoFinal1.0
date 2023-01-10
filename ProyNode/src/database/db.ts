import mysql from 'mysql';

const connData = {
	"host": "localhost",
	"port": 3306,
	"user": "root",
	"password": "",
	"database": "registros"
}

class DB {
	connection: mysql.Connection;

	public constructor() {
		this.connection = mysql.createConnection({
			host: connData.host,
			user: connData.user,
			password: connData.password,
			database: connData.database
		});
	}

	public async connect() {
		return new Promise((resolve, reject) => {
			this.connection.connect((err) => {
				if (err) {
					reject(err);	
				} else {
					resolve(1);
				}
			});
		});
	}
	public disconnect() {
		this.connection.destroy();
	}

	public async query(sqlQuery: string) {
		return new Promise((resolve, reject) => {
			this.connection.query(sqlQuery, (err, results, fields) => {
				if (err) {
					reject(err);
				}
				resolve(results);
			})
		})
	}
	public async preparedStatement(sqlQuery: string, args: Array<object>) {
		return new Promise((resolve, reject) => {
			this.connection.query(sqlQuery, args, (err, results, fields) => {
				if (err) {
					reject(err);
				}
				resolve(results);
			})
		})
	}
}

export default DB;