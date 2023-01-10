import { Request, Router } from 'express';
import accountDAO from '../../database/account.dao';
import DB from '../../database/db';

// Export module for registering router in express app
export const router: Router = Router();

function validateSession(request: Request) {
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
		res.render("index");
	}
});

router.get("/account/perfil", async (req, res) => {
	if (validateSession(req)) {
		let tel: Number = req.session.telefono ? req.session.telefono : -1;
		let data = await accountDAO.getAccountInfo(tel);

		res.render("account/perfil", {
			userData: JSON.stringify(data)
		});
	} else {
		res.render("index");
	}
});