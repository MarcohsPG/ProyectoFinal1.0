import app from "./server";
import config from "../config.json";
import DB from "./database/db";
import crypto from "crypto";
import accountDAO from "./database/account.dao";

// Start the application by listening to specific port
const port = Number(process.env.PORT || config.PORT || 8080);
const db = new DB();

app.post("/usuario/registrar.do", async (req, res) => {
    let hash = crypto.createHash("md5").update(req.body.pass).digest("hex");
    let result: any = await db.preparedStatement(
        "CALL crearUsuario(?, ?, ?, ?, ?)",
        [
            req.body.nombres,
            req.body.apellidos,
            req.body.telefono,
            req.body.email,
            hash
        ]
    );
    res.json(result[0][0]);
});

app.post("/login.do", async (req, res) => {
    let login = await accountDAO.validateLogin(req.body.email, req.body.telefono, req.body.pass);
    
    if (login) {
		console.log(req.session);
		req.session.telefono = req.body.telefono;
		res.redirect("/account/home");
	} else {
		req.session.telefono = -1;
		res.redirect("/sesion");
	}
});

app.post("/logout.do", async(req, res) => {
    req.session.telefono = -1;
    res.redirect("/");
})

app.listen(port, () => {
    console.info("Express application started on port: " + port);
});
