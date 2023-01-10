import { Request, Router } from 'express';
import accountDAO from '../../database/account.dao';
import DB from '../../database/db';
import denunciaDAO from '../../database/denuncia.dao';

// Export module for registering router in express app
export const router: Router = Router();

export function validateSession(request: Request) {
	if (request.session) {
		if (request.session.telefono) {
			return true;
		}
	}
	return false;
}

router.get("/account/home", (req, res) => {
	if (validateSession(req)) {
		res.render("account/home")
	} else {
		res.redirect("/");
	}
});

router.get("/account/perfil", async (req, res) => {
	if (validateSession(req)) {
		let tel: Number = req.session.telefono ? req.session.telefono : -1;
		let data = await accountDAO.getAccountInfo(tel);

		res.render("account/perfil", {
			userNombres: data.nombres,
			userApellidos: data.apellidos,
			userTelefono: data.telefono,
			userEmail: data.email
		});
	} else {
		res.redirect("/");
	}
});

router.get("/account/historial", async (req, res) => {
	if (validateSession(req)) {
		let tel: Number = req.session.telefono ? req.session.telefono : -1;
		let data = await denunciaDAO.getDenuncias(tel);

		console.log(data);
		console.log(data.length);
		res.render("account/historial", {
			data: JSON.stringify(data)
		});
	} else {
		res.redirect("/");
	}
});