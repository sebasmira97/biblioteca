using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace BibliotecaApi.Class
{
    public class Cliente
    {
        public DbSet<Cliente> Clientes { get; set;}

       
    }
}