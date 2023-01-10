import crypto from 'crypto';
import internal from 'stream';
import DB from "./db";

class accountDAO {
	static async validateLogin(email: String, telefono: Number, pass: string) {
		let db = new DB();
		let passHash: String = crypto.createHash("md5").update(pass).digest("hex");
		let result: any = await db.preparedStatement(
			"CALL loginUsuario(?, ?, ?)",
			[
				telefono, 
				email, 
				passHash
			]
		);
		db.disconnect();
		return result[0][0].login;
	}

	static async getAccountInfo(telefono: Number) {
		let db = new DB();
		let result: any = await db.preparedStatement(
			"SELECT u.nombres, u.apellidos, u.telefono, u.email FROM usuario u WHERE u.telefono = ?",
			[
				telefono
			]
		);
		db.disconnect();
		return result[0];
	}

	static async createUsuario(nombres: String, apellidos: String, telefono: Number, email: String, pass: string) {
		let hash: String = crypto.createHash("md5").update(pass).digest("hex");
		let db = new DB();
		let result: any = await db.preparedStatement(
			"CALL crearUsuario(?, ?, ?, ?, ?)",
			[
				nombres,
				apellidos,
				telefono,
				email,
				hash
			]
		);
		db.disconnect();
		return result[0][0];
	}
}

export default accountDAO;