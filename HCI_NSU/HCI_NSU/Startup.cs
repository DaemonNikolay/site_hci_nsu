using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(HCI_NSU.Startup))]
namespace HCI_NSU
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
